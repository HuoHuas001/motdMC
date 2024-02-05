function query(){
    var ip = document.getElementById("ip").value;
    var port = document.getElementById("port").value;
    var java = document.getElementById("java").checked;
    //console.log(ip,port,java)
    let url = "/iframe.php?ip="+ip+"&auto=on&port="+port
    if(java){
        url += "&java=on"
    }
    
    document.getElementById("iframe").src = url
    document.getElementById("iframeId").contentWindow.location.reload()
}

function gen(){
    var ip = document.getElementById("ip").value;
    var port = document.getElementById("port").value;
    var java = document.getElementById("java").checked;
    var auto = document.getElementById("auto").checked;
    let url = "//blog.txssb.cn/motd/iframe.php?ip="+ip+"&auto=on&port="+port
    if(java){
        url += "&java=on"
    }
    if(auto){
        url += "&auto=on"
    }
    document.getElementById("code").value = '<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="500px" height="195px" scrolling=no src="'+url+'"></iframe>'
}
//query()