import $ from 'jquery'

class MyNotes {
  constructor() {
    this.events();
  }

  events() {
    $(".delete-note").on("click", this.deleteNote);
  }

  // Methods
  deleteNote() {
    alert("YOU CLICKED DELETE");
  }
}

export default MyNotes;