function checkInputs(){
  let elements = document.getElementsByTagName('input');
  let serverDescription = document.getElementsByName('server-description').item(this);
  let empty = true;

  for (let i = 0; i < elements.length-1; i++){
    if (elements.item(i).value === ''){
      empty = false;
    }
  }

  if (serverDescription.value.length < 10){
    empty = false;
  }

  document.getElementsByName('submission-button').item(this).hidden = empty !== true;
}

function checkValues(id){

}