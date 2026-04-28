const http=require('http');

const port = 3000;
const host = '0.0.0.0';

const server = http.createServer((req,res)=> {
    console.log(`Request masuk: ${req.method},${res.url}`);
    req.writeHead(200,{'Content-type':'text/plain'});
    res.end ('Hello world');
});

server.listen(port,host,()=> {
    console.log(`server running at http://${host}:${port}/`);
});