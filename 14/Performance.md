# Network Performance

XHR requests can follow any of these paths
- Success
  - Response valid
- Failure
  - Request did not reach the server
  - Request reached the server, but was not processed
  - Browser did not send the request
  - Wrong response
  - Response was too slow

When an `xhr.send()` occurs
1. Request is created and send
2. TCP connection established between client and server
    - Socket is not closed now
    - Connection kept open for additional responses
    - Set in Connection: Keep-Alive
    - W3C said: From a given client to a server at a given time there should be only 2 persistent connections
    - Request pipeline feature added, where requests can be interleaved in the same persistent connection

We need some workarounds for this 2 connection limit
- Browser config to set max-peristent-connections
- Write your own browser
- Create more subdomains using proxies
- Replicate the servers (Cost)
- Bundle requests together (packing overhead, and latency)
- Create your own request queue, and throttle sending through the browser

