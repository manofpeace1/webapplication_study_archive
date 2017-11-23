/*
1. This is a Google Script which you can use to import JSON response of PubNative Bulk API to Google Spreadsheet
*/

var blank_itunes_url = "https://itunes.apple.com/en/app/blank/id";
var blank_play_url = "https://play.google.com/store/apps/details?id=";

function createPreview(bundle_id, platform, country){
  if (platform == "iOS") {
    click_url = "https://itunes.apple.com/" + country + "/app/blank/id" + bundle_id;
  } else {
    click_url = blank_play_url.concat(bundle_id);
  }
  return click_url;
}

//Logger.log(data[1]);                         
function myFunction() {
  //var response_countries = UrlFetchApp.fetch("https://restcountries.eu/rest/v1/all");
  //var json_countries = response_countries.getContentText();
  //var data_countries = JSON.parse(json_countries);
  //var map_countries = {};
  //for(i = 0; i < data_countries.length; i++) {
    //map_countries[data_countries[i]['alpha3Code']] = data_countries[i]['alpha2Code'];
  //}
  //function country2LetterCodes(key) {
    //return map_countries[key];
  //}  
    
  var response = UrlFetchApp.fetch("http://bulk.pubnative.net/api/bulk/v1/promotions?app_token=788ea19a8bf0b47f1a24c0f4cdfe9d61fb40e5e2c9f0d3ab1f7dc9708c5f9f8a");
  var json = response.getContentText();
  var data = JSON.parse(json);
  var spread_sheet = SpreadsheetApp.openById("1_mYA-JcZLCZ9uCZ4vLHiDrtl-LnluY-3IayV-6W0dCc");
  SpreadsheetApp.setActiveSpreadsheet(spread_sheet);
  var sheet = spread_sheet.getActiveSheet();
  var num_rows = sheet.getMaxRows();
  if(num_rows >= 3) {
    num_rows = num_rows - 2;
    sheet.deleteRows(2, num_rows);
  }      
  for(i = 0; i < data.length; i++) {
    var geos = [];
    if (typeof data[i]['campaigns'][0] === 'undefined') {
      i++;
    } else {
      for (j = 0; j < data[i]['campaigns'].length; j++){
        var cpi_in_points = data[i]['campaigns'][j]['points'];
        var cpi = cpi_in_points/1000;
        sheet.appendRow([
          data[i]['creatives']['title'],
          data[i]['app_details']['platform'],
          data[i]['campaigns'][j]['devices'].join(),
          cpi,
          data[i]['campaigns'][j]['countries'].join(),
          
        ]);
      }        
    }
  }
  sheet.deleteRow(2);
}