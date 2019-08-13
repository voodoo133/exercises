class Clock {
  constructor (options) {
    this._elem = options.elem;
    this._timer = null;
    
    this._render();
  }
  
  start () {
    this._update();
    
    this._timer = setInterval(this._update.bind(this), 1000);
  }

  stop () {
    clearInterval(this._timer);
  };
  
  _render () {
    if (this._elem.children.length === 0) {
      let hh = document.createElement('span');
      hh.classList = 'clock__hh';
      hh.textContent = '00';
      
      let mm = document.createElement('span');
      mm.classList = 'clock__mm';
      mm.textContent = '00';
      
      let ss = document.createElement('span');
      ss.classList = 'clock__ss';
      ss.textContent = '00';
      
      let delimeter = document.createElement('span');
      delimeter.classList = 'clock__delimeter';
      delimeter.textContent = ':';
      
      this._elem.append(hh, delimeter, mm, delimeter.cloneNode(true), ss);
    }
  };
  
  _update () {
    let time = this._getCurrentTime();
    
    this._elem.querySelector('.clock__hh').textContent = time.hh;
    this._elem.querySelector('.clock__mm').textContent = time.mm;
    this._elem.querySelector('.clock__ss').textContent = time.ss;
  }
  
  _getCurrentTime() {
    var now = new Date();
    
    let time = {
      hh: '',
      mm: '',
      ss: ''
    };
    
    time.hh = now.getHours();
    if (time.hh < 10) time.hh = '0' + time.hh;

    time.mm = now.getMinutes();
    if (time.mm < 10) time.mm = '0' + time.mm;
 
    time.ss = now.getSeconds();
    if (time.ss < 10) time.ss = '0' + time.ss;
    
    return time;
  }
}