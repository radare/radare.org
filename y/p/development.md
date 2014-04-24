Development
===========

The author and main developer of radare is
[@trufae](http://twitter.com/trufae) (pancake).

Many contributors helped the project (see
[AUTHORS](https://github.com/radare/radare2/blob/master/AUTHORS)).
In order to contribute to the project we recommend using github pull
requests, but unified diff patches and remote gits are also welcome.

Feel free to join the [irc](irc://irc.freenode.net/radare) to discuss,
share your ideas and ask your questions. 

Donations
=========

We accept donations via [Paypal](http://www.paypal.com/) or using
[Bitcoin](http://www.bitcoin.com) (
[1R4daREx3gYpYJ87KqWRahzFHVfZMQVBi](https://blockchain.info/address/1R4daREx3gYpYJ87KqWRahzFHVfZMQVBi)
)

<table>
<tr><td>
&nbsp;&nbsp;&nbsp;
</td><td style="width:120px">
<!-- onclick=window.location='https://blockchain.info/address/1NdACP7cZw3nB73dX8vMKHNuns9TxHsBPz'> -->
<script src="http://coinwidget.com/widget/coin.js"></script>
<script>
CoinWidgetCom.go ({
	wallet_address: "1R4daREx3gYpYJ87KqWRahzFHVfZMQVBi"
	, currency: "bitcoin"
	, counter: "count"
	, alignment: "br"
	, qrcode: true
	, auto_show: false
	, lbl_button: "Donate"
	, lbl_address: "radare donations btc address"
	, lbl_count: "donations"
	, lbl_amount: "BTC"
});
</script>
</td><td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBdrIkGlPtnwvtWi/srcPNmjLa04nU6dmr2lMGchil1kx6oa6tp5vZ15UBtVvw243FnFVCwGAsjjugbL/JxyHHyaioHeTloKalSJh9O1h8GPKUaYiUftm4nWyHJdv2Xguw7DV571Ugh5lClCB3VYidlB4rzdI4khBPTTZvDAXCwCDELMAkGBSsOAwIaBQAwgawGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI1VqVXj7w2EuAgYijAnsp1Tkq29wLjud2Nqk1BNSEeoMdvouMUk4TJ/f01HEMZ+UnAeVFDevsPBvD9HG8jq3c1zMzrto4/AQbOmcFCZSPBSXtvVCADIBuPAnNCg+0oJ0O4mOQJJ0YnKTKcI+XPJzoiYvzYRl9ldz5Wimg3YTbzIqPARH07UyRx5OusM9n9BkX0ymUoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTIxMTE2MDkzNTAzWjAjBgkqhkiG9w0BCQQxFgQU+ErW12e+eP0FJMGOfh6pFuzLD4gwDQYJKoZIhvcNAQEBBQAEgYCxQBO7HwTQwaY7y3r+uS8pcbD7YbS1DG7WYBxfkKk3U4IQYpOOzJj7dxVezzyvEJDb1ebS0ouxR74jqNjbt8iUPB1ggQT4bXKdNJU+TyW7leGKnrNxEYP2s4wXj0G8/dRqhJSHrGYb5mL2K/Ug3dNS4SVxH/GtGwUuWKtOxJIPJQ==-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form>
</td></tr>
</table>
