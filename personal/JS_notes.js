/*Learn the mindset of programming
Part of being a good developer is writing code that both computers and other humans can read.
*/

console.log()
//remember the structure order: where, how, what

String,Boolean,null,Number,undefined
//types of values in JS

const //constant variable that cannot change
let //variable that can change

+=, -=, *=
++, -- //meaning it adds/substracts by 1 unit

const myName = 'Pilsoo';
const myCity = 'Berlin';

console.log(`My name is ${myName}. My favorite city is ${myCity}.`);


x = 1 (x is now 1)
x == 1 (does x equal to 1?)
x === 1 (does x equal to 1 AND is same value type?)

&& = 'AND'
|| = 'OR'

//function
const takeOrder = () => {
  console.log('Order: pizza');
}


//methods that JavaScript developers use frequently are as below amongs many others.
.shift() //remove the first value
.pop() //remove the last value
.unshift() //add the value to the first of the array
.push() //add the value to the last of the array

.join(), .slice(), .splice(), .concat()



//flipping card game

let cards = ['Diamond', 'Spade', 'Heart', 'Club'];
let currentCard = 'Heart'

while (currentCard !== 'Spade') {
  console.log (currentCard);
  currentCard = cards[Math.floor(Math.random() * 4)];
}
console.log(currentCard);


module.exports = {Variable Name}




//the boilerplate code for an AJAX GET request using an XMLHttpRequest object.
const xhr = new XMLHttpRequest();
const url = 'https://api-to-call.com/endpoint';

xhr.responseType = 'json';
xhr.onreadystatechange = function()
{
  if (xhr.readyState === XMLHttpRequest.DONE)
  {
console.log(xhr.response);
  }
};

xhr.open('GET', url);
xhr.send();


//the boilerplate for an AJAX POST request using an XMLHttpRequest object.
const xhr = new XMLHttpRequest;
const url = 'https://api-to-call.com/endpoint';
const data = JSON.stringify({id: '200'});

xhr.responseType = 'json';

xhr.onreadystatechange = function()
{if (xhr.readyState === XMLHttpRequest.DONE)
  {console.log(xhr.response);};
};

xhr.open('POST', url);
xhr.send(data);