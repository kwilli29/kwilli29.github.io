
var resp = document.getElementById("response"); // find the element w/ id="response",
// store where it was found in var resp, like a shortcut to it

var likeB = document.getElementById("likeB"); // find element with id="yesB", store location in var yesB
// in this case, id="yesB" is a button

var count = 0; // counter set to 0 to help demonstrate conditionals later


likeB.addEventListener("click", displayYes);
// tell button to prepare for if the user clicks it

function displayYes() { //html text on page is changed when button is pressed
  resp.innerHTML = "Cool!";
  count++;
  console.log("yes: " + count); // console updates which btn was pressed & how many times user presses btns

  if (count == 4) { // every time count equals 4, it will reset and print a new message
    count = 0;
    resp.innerHTML = "Make up your mind!";
  }
}

$('.carousel').carousel();

//////////////

asynch function populate() {
  const requestURL = 'https://raw.githubusercontent.com/kwilli29/kwilli29.github.io/main/db.json';
  const request = new Request(requestURL);

  const response = await fetch(request);
  const posts = await response.json();

  populatePosts(posts);

}

function populatePosts(obj){
    const section = document.querySelector('section');
    const posts = obj.posts;

    for (const post of posts) {

      const Div_Row = document.createElemt("div");
      Div_Row.className = "row";

      const Div_Col = document.createElement('div');
      Div_Col.className = "col-sm-6";

      const Div_Card = document.createElement('div');
      Div_Card.className = "card";

      const Img = image_create(posts.src, posts.title); // new Image(), createImg fcn?
      Img.className = "card-img-top";

      const Div_Body = document.createElement('div');
      Div_Body.className = "card-body";

      const Para = document.createElement('p');
      Para.className = "card-text";

      const Div_Like = document.createElement('div');
      Div_Like.className = "like-section";

      const Span = document.createElement('span');
      Span.className = "likes";

      const LikeButton = document.createElement('button');
      LikeButton.className = "like-button";

      Span.textContext = `${posts.likes} likes`;

      Div_Row.appendChild(Div_Col);
      Div_Col.appendChild(Div_Card);
      Div_Card.appendChild(Img);
      Div_Card.appendChild(Div_Body);
      Div_Body.appendChild(Para);
      Div_Body.appendChild(Div_Like);
      Div_Like.appendChild(Span);
      Div_Like.appendChild(LikeButton);

      section.appendChild(Div_Row);

    }

}

function img_create(src, title) {
    var img = IEWIN ? new Image() : document.createElement("img");
    img.src = src;
    if ( title != null ) img.title = title;
    return img;
}

populate();

//////////////
/* document.addEventListener("DOMContentLoaded", function(){
  fetch('https://build-practice.kellywilliams4.repl.co/posts.html#')
  .then(resource => resource.json())
  .then((data) => {addPictureToPage(data)
  })
});

function addPictureToPage(data){

  const likesCounter = document.querySelector('.likes');
  likesCounter.innerText = `${data.likes} likes`;

  const likeButton = document.querySelector('.like-button');

  likeButton.addEventListener('click', function(event){
    likesCounter.innerText = incrementLikes(data);
  })
}

function incrementLikes(image){
  let likes = 0;
  fetch('https://build-practice.kellywilliams4.repl.co/posts/${post.id}')
  .then(resource => resource.json())
  .then((data) => {
    likes = data.likes
  })

  let newLikes = likes + 1;

  fetch('https://build-practice.kellywilliams4.repl.co/posts/1', {
      method: 'PATCH',
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json"
      },
      body: JSON.stringify({
          "likes": newLikes
      })
  });

  let likesText = `${newLikes} likes`;

  return likesText;

} */
