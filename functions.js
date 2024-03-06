
function check(c1, ch, c2, u1, c3, u2) {
   var col = document.getElementById(c1).style.color;
   var che = document.getElementById(ch).checked;
   if(che == true && col == "rgb(41, 50, 184)") {
      document.getElementById(c1).style.color = "rgb(198, 194, 194)";
      document.getElementById(ch).checked = false;
   } else {
      document.getElementById(c1).style.color = "rgb(41, 50, 184)";
      document.getElementById(ch).checked = true;
   }
   document.getElementById(c2).style.color = "rgb(198, 194, 194)";
   document.getElementById(u1).checked = false;
   document.getElementById(c3).style.color = "rgb(198, 194, 194)";
   document.getElementById(u2).checked = false;
}

function displayon (obs, item) {
   document.getElementById(obs).style.display = 'block';
   document.getElementById(item).style.marginBottom = '0px';
   document.getElementById(item).style.borderRadius = '5px 5px 0px 0px';
   
}

function displayoff (obs, item, txt) {
   document.getElementById(obs).style.display = 'none';
   document.getElementById(item).style.borderRadius = '5px';
   document.getElementById(txt).value = '';
}

function desmarcar (x) {
   document.getElementById(x).setAttribute('checked', '');
}

function marcDesm(x) {
   if (x == document.getElementById(x).id) {
       var ch = document.getElementById(x).checked;
       if(ch == true) {
           document.getElementById(x).checked = false;
       }
       else
           document.getElementById(x).checked = true;
   } else {
       document.getElementById(x).checked = false;
   }
}

function getScrollHeight(elm){
   var savedValue = elm.value
   elm.value = ''
   elm._baseScrollHeight = elm.scrollHeight
   elm.value = savedValue
 }
 
 function onExpandableTextareaInput({ target:elm }){
   // make sure the input event originated from a textarea and it's desired to be auto-expandable
   if( !elm.classList.contains('autoExpand') || !elm.nodeName == 'TEXTAREA' ) return
   
   var minRows = elm.getAttribute('data-min-rows')|0, rows;
   !elm._baseScrollHeight && getScrollHeight(elm)
 
   elm.rows = minRows
   rows = Math.ceil((elm.scrollHeight - elm._baseScrollHeight) / 20)
   elm.rows = minRows + rows
 }
 
 
 // global delegated event listener
 document.addEventListener('input', onExpandableTextareaInput)
 
 // OLD SOLUTION USING JQUERY:
 // // Applied globally on all textareas with the "autoExpand" class
 
 // $(document)
 //     .one('focus.autoExpand', 'textarea.autoExpand', function(){
 //         var savedValue = this.value;
 //         this.value = '';
 //         this._baseScrollHeight = this.scrollHeight;
 //         this.value = savedValue;
 //     })
 //     .on('input.autoExpand', 'textarea.autoExpand', function(){
 //         var minRows = this.getAttribute('data-min-rows')|0, rows;
 //         this.rows = minRows;
 //         rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
 //         this.rows = minRows + rows;
 //     });