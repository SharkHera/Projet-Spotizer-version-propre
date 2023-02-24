let Img_Artiste = document.querySelector(".Img_Artiste");
let Img_Artiste2 = document.querySelector(".Img_Artiste2");
let Eql = document.querySelector(".Equiliser");
let Titre_Music = document.querySelector("#Titre_Music");
let Artiste = document.querySelector("#Artiste_Music");
let EnCours = document.querySelector("#EnCours");
let Total_Music = document.querySelector("#Total_Music");
let Timeline_Min = document.querySelector("#Timeline_Min");
let Timeline_Max = document.querySelector("#Timeline_Max");

let Timer;
let Music_Auto = 1;
let Index = 0;
let Piece = false;
let Aleatoire = false;
let Repeat = false;

// Creer les sons de la liste dans un tableau

let Music = document.createElement("audio");



// tout les sons de la liste dans un tableau

fetch('Songdata.php')
  .then(response => response.json())
  .then(data => {
    Tous_Les_Sons = data.map(row => ({
      Nom_Artiste: row.Nom_Artiste,
      Lien_Music: row.Lien_Music,
      Lien_Image: row.Lien_Image,
      Titre: row.Titre
    }))
    console.log(Tous_Les_Sons);

    // Update UI with Tous_Les_Sons data
    Tous_Les_Sons.forEach((song, index) => {
      let Titre = document.querySelector(`.Titre${index + 1}`);
      Titre.innerHTML = song.Titre;

      let Artiste = document.querySelector(`.Artiste${index + 1}`);
      Artiste.innerHTML = song.Nom_Artiste;
    });
    load_track(Index);
    // Do other things with Tous_Les_Sons
  })
  .catch(error => {
    console.error(error);
  });

//toutes les fonctions



//Playlist
