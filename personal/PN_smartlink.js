func DirectLink(req *mid.Request) error {
    ads := srv.BuildAds(req)

    if len(ads) > 0 {
        clickUrl, err := ads[0].ClickURL(referer)
        if err != nil {
            return err
        }
        var buffer bytes.Buffer
        buffer.WriteString(clickUrl)
        for param, value := range req.ReqQuery {
            if _, ok := directLinkAllowedParams[param]; ok {
                buffer.WriteString("&")
                buffer.WriteString(param)
                buffer.WriteString("=")
                buffer.WriteString(value[0])
            }
        }
        req.Redirect = buffer.String()
    }
    return nil
}
