<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
  function start(){
var param = location.search;
var ret = param.substr( 3 );
  
vi = document.getElementById("vi");
  vi.src = "https://creative-smn.glitch.me/"+ret; 
  
  }
</script>
<button onclick="start()">
  再生
</button>
<video height="50%" width="100%" id="vi" src="" controls></video>