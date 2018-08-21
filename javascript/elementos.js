// Document Methods for Accessing Elements
// The document object provides several methods for accessing the elements that it contains.

// document.getElementById
// We've been using this method to access elements using their id. This method accepts an id string and returns the element node that has that id.

// document.getElementById("special"); returns the element on the page that has an id of "special".

// document.querySelector
// document.querySelector accepts a CSS-style selector string and returns the first element on the page that matches the selector.

// document.querySelector(".cool"); returns the first element on the page that has a class of "cool".

// A note on node collections
// The document.getElementById method will always only return 1 element, since there can't be more than 1 element with the same id within a document. However, the following methods return a collection of items, since there can be multiple elements of the same class or the same tag.

// This means that once you store the returned collection, you must either use a loop to traverse the collection if you need to access each element, or use the array notation [ ] to access a specific element using it's index in the list.

// document.head returns the <head> element of the page.

// document.body returns the <body> element of the page.

// document.title returns the title of the document

// document.forms returns a collection of all <form> elements on the page.

// document.images returns a collection of all <img> elements on the page.

// document.scripts returns a collection of all <script> elements on the page.

document.getElementById("myArticle").getElementsByTagName("h3");

document.getElementById("mySection").getElementsByClassName("special");

var list = document.getElementsByTagName("ul")[0];
list.innerHTML += "<li>garlic</li><li>aaa</li>";

var day = document.getElementById("day");

var newHeading = document.createElement("h1");
newHeading.innerHTML = "New section here";

var newText = document.createTextNode("Hi, I'm new here");

var originalList = document.getElementById("myList");
var exactCopy = originalList.cloneNode(true);