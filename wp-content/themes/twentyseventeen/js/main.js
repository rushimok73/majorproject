var resumepostBtn = document.getElementById("resume-result");
var resumeContainer = document.getElementById("resume-container");

if(resumepostBtn){
resumepostBtn.addEventListener("click",function(){
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'http://localhost/wordpress/wp-json/wp/v2/posts');
  ourRequest.onload = function() {
    if (ourRequest.status >= 200 && ourRequest.status < 400) {
      var data = JSON.parse(ourRequest.responseText);
      createHTML(data);
      resumepostBtn.remove();
    } else {
      console.log("We connected to the server, but it returned an error.");
      console.log(data);
    }
  };

  ourRequest.onerror = function() {
    console.log("Connection error");
  };

  ourRequest.send();
});
}

function createHTML(postsData){
  var ourHTMLString = '';
  for(i=0; i<postsData.length;i++){
    ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
    ourHTMLString += postsData[i].content.rendered;
  }
  resumeContainer.innerHTML = ourHTMLString;
}
