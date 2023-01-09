
// $('.carousel').carousel();

//////////////

async function populate() {
  const requestURL = 'https://raw.githubusercontent.com/kwilli29/kwilli29.github.io/main/db.json';
  const request = new Request(requestURL);

  const response = await fetch(request);
  const posts = await response.json();

  console.log(posts);

  populatePosts(posts);

}

function populatePosts(obj){
    const section = document.querySelector('section');
    const posts = obj.posts;

    for (const post of posts) {

      const Div_Row = document.createElement("div");
      Div_Row.className = "row";

      const Div_Col = document.createElement('div');
      Div_Col.className = "col-sm-6";

      const Div_Card = document.createElement('div');
      Div_Card.className = "card";

      const Img = img_create(post.src, post.title); // new Image(), createImg fcn?
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
    var img = new Image(); // : document.createElement("img");
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
