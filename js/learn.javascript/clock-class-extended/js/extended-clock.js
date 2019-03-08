function ExtendedClock (options) {
  Clock.apply(this, arguments);
  this._precision = +options.precision || 1000;
}

ExtendedClock.prototype = Object.create(Clock.prototype);

ExtendedClock.prototype.start = function () {
  this._render();
  this._timer = setInterval(this._render.bind(this), this._precision);
};