
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

document.addEventListener("DOMContentLoaded", function(){
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

}
