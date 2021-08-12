function frameAdjustments(){
  let frame = document.getElementsByTagName('iframe').item(this);
    frame.style.height = frame.contentWindow.document.body.scrollHeight + 30 + 'px';
}