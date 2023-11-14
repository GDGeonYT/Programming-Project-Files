class Music {
  constructor(title, artist, genre) {
    this.title = title;
    this.artist = artist;
    this.genre = genre;
  }
}

class UI {
  static stored() {
    fetch("./stored.json")
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        const musics = data.Musics;
        musics.forEach((music) => UI.display(music));
      });
  }

  static display(music) {
    const musicTable = document.querySelector("#musicTable"); // Make sure you have the correct table ID
    const row = document.createElement("tr");

    row.innerHTML = `
      <td>${music.title}</td>
      <td>${music.artist}</td>
      <td>${music.genre}</td>
    `;
    musicTable.appendChild(row);
  }
}

// Display Data
UI.stored();
