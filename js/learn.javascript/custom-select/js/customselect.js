"use strict";

class CustomSelect {
  constructor (options) {
    this._elem = options.elem;
    
    this._title = this._elem.querySelector('.title');
    this._list = this._elem.querySelector('ul');
    
    this._setHandlers();
  }
  
  _setHandlers () {
    this._title.onclick = (e) => {
      this._toggleSelect();
    };
    
    this._list.onclick = (e) => {
      let t = e.target;
      
      t = t.closest('li');
      
      if (!t) return;

      this._setSelectNewValue(t);
      
      this._toggleSelect();
    };
    
    document.addEventListener('click', (e) => {     
      if (!this._elem.contains(e.target)) 
        this._closeSelect(); 
    }, false);
  }
  
  _toggleSelect () {
    this._elem.classList.toggle('open');
  }
  
  _closeSelect () {
    this._elem.classList.remove('open');
  }
  
  _setSelectNewValue (t) {
    this._title.textContent = t.textContent;
    
    this._makeSelectEvent(t.dataset.value);
  }
  
  _makeSelectEvent (v) {
    let e = new CustomEvent('select', {
      bubbles: true,
      cancelable: true,
      detail: {
        value: v
      }
    });
    
    this._elem.dispatchEvent(e);
  } 
 }