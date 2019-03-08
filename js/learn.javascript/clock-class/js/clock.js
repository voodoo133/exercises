function Clock (options) {
  this._timer = null;
  this._template = options.template || '';
}

Clock.prototype.start = function () {
  this._timer = setInterval(this._render.bind(this), 1000);
};

Clock.prototype.stop = function () {
  clearInterval(this._timer);
};

Clock.prototype._render = function () {
  var time = this._template;
  
  var now = new Date();
  
  var hours = now.getHours();
  if (hours < 10) hours = '0' + hours;
  time = time.replace('h', hours);
  
  var minutes = now.getMinutes();
  if (minutes < 10) minutes = '0' + minutes;
  time = time.replace('m', minutes);
  
  var seconds = now.getSeconds();
  if (seconds < 10) seconds = '0' + seconds;
  time = time.replace('s', seconds);
  
  console.log(time);
};