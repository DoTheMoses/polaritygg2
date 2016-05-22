function remove_hash_on_top(ev){
  if(window.pageYOffset==0)
  history.pushState("", document.title, window.location.pathname + window.location.search);
}
window.onscroll=remove_hash_on_top;

{
var matt_fact_a = [
  "Favorite Movie: ",
  "Favorite Fast Food: ",
  "Favorite Book: ",
  "Favorite TV Show: ",
  "Favorite Smasher: ",
  "Favorite Hearthstone Streamer: ",
  "Favorite DotA 2 Team: ",
  "Favorite DotA 2 Player: ",
  "Favorite Pokemon: ",
  "Favorite Ice Cream: ",
  "Favorite Band: ",
];

var matt_fact_b = [
  "The Emperor's New Groove",
  "Chipotle",
  "The Mill on the Floss",
  "Futurama",
  "Harriet",
  "Kripparian",
  "Team Empire",
  "Resolution",
  "Zapdos",
  "Cookie Dough",
  "Motion City Soundtrack",
];

function matt_fact() {
var x = document.getElementById("matt_fun_fact")
var array_index = Math.floor((Math.random() * 10) + 1);
  x.innerHTML = "<b>" + matt_fact_a[array_index] + "</b>" + matt_fact_b[array_index];
}

window.onload = function() {
  matt_fact();
}

}