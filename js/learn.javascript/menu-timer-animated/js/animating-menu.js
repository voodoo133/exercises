function AnimatingMenu () {
  Menu.apply(this, arguments);
  this._animate_timer = null;
}

AnimatingMenu.prototype = Object.create(Menu.prototype);

AnimatingMenu.STATE_ANIMATING = 2;

AnimatingMenu.prototype.open = function () {
  this._state = AnimatingMenu.STATE_ANIMATING;
  
  this._animate_timer = setTimeout(Menu.prototype.open.bind(this), 1000);
};

AnimatingMenu.prototype.close = function () {
  clearTimeout(this._animate_timer);
  
  Menu.prototype.close.apply(this, arguments);
};

AnimatingMenu.prototype._stateAsString = function () {
  
   switch (this._state) {
    case AnimatingMenu.STATE_ANIMATING: 
      return 'анимация';
      
    default:
      return Menu.prototype._stateAsString.call(this);
  }
};