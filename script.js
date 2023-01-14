
// $('.carousel').carousel();

//////////////

/* async function populate() {
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

      const Div_Row = document.createElement('div');
      Div_Row.className = "row justify-content-center";

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
      LikeButton.innerHTML = " <3 ";
      LikeButton.className = "like-button btn btn-primary";

      Span.innerHTML = `    ${post.likes} likes`;

      Div_Row.appendChild(Div_Col);
      Div_Col.appendChild(Div_Card);
      Div_Card.appendChild(Img);
      Div_Card.appendChild(Div_Body);
      Div_Body.appendChild(Para);
      Div_Body.appendChild(Div_Like);
      Div_Like.appendChild(LikeButton);
      Div_Like.appendChild(Span);

      section.appendChild(Div_Row);

      LikeButton.onclick = function(){
        console.log('click');
        newLikes = post.likes + 1;
        Span.innerHTML = `    ${newLikes} likes`;

        const data = { 'likes' : newLikes };

        fetch('file:///Users/Kelly/Documents/GitHub/kwilli29.github.io/posts.html', {
          method: 'PUT', // or 'PUT'
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        })
        .then((response) => response.json())
        .then((data) => {
          console.log('Success:', data);
        })
        .catch((error) => {
          console.error('Error:', error);
        });
      };
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

function incrementLikes(post){
  let likes = 0;
  fetch('https://build-practice.kellywilliams4.repl.co/posts/${post.id}')
  .then(resource => resource.json())
  .then((data) => {
    likes = data.likes;
  })

  let newLikes = likes + 1;

  fetch('https://build-practice.kellywilliams4.repl.co/posts/1', {
      method: 'PATCH',
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json"
      },
      body: JSON.stringify({
          "likes": newLikes;
      })
  });

  let likesText = `    ${newLikes} likes`;

  return likesText;

} */
