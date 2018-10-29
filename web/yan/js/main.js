
var bar1 = new ProgressBar.Circle(circle1, {
  strokeWidth: 12,
  easing: 'easeInOut',
  duration: 1400,
  color: '#27AE60',
  trailColor: '#eee',
  trailWidth: 12,
  svgStyle: null
});

bar1.animate(0.6);  // Number from 0.0 to 1.0

var bar2 = new ProgressBar.Circle(circle2, {
  strokeWidth: 12,
  easing: 'easeInOut',
  duration: 1400,
  color: '#27AE60',
  trailColor: '#eee',
  trailWidth: 12,
  svgStyle: null
});

bar2.animate(0.3);  // Number from 0.0 to 1.0

var bar3 = new ProgressBar.Circle(circle3, {
  strokeWidth: 12,
  easing: 'easeInOut',
  duration: 1400,
  color: '#27AE60',
  trailColor: '#eee',
  trailWidth: 12,
  svgStyle: null
});

bar3.animate(0.9);  // Number from 0.0 to 1.0

var bar4 = new ProgressBar.Circle(circle4, {
  strokeWidth: 12,
  easing: 'easeInOut',
  duration: 1400,
  color: '#27AE60',
  trailColor: '#eee',
  trailWidth: 12,
  svgStyle: null
});

bar4.animate(1.0);  // Number from 0.0 to 1.0

//longbar

var longbar1 = new ProgressBar.Line(oilLongbar, {
  strokeWidth: 5,
  easing: 'easeInOut',
  duration: 1400,
  color: '#27AE60',
  trailColor: '#eee',
  trailWidth: 5,
  svgStyle: {'border-radius': '7px'}
});

longbar1.animate(0.6);  // Number from 0.0 to 1.0

var longbar2 = new ProgressBar.Line(wheelLongbar, {
  strokeWidth: 5,
  easing: 'easeInOut',
  duration: 1400,
  color: 'yellow',
  trailColor: '#eee',
  trailWidth: 5,
  svgStyle: {'border-radius': '7px'}
});

longbar2.animate(0.3);  // Number from 0.0 to 1.0

var longbar3 = new ProgressBar.Line(totalLongbar, {
  strokeWidth: 5,
  easing: 'easeInOut',
  duration: 1400,
  color: 'red',
  trailColor: '#eee',
  trailWidth: 5,
  svgStyle: {'border-radius': '7px'}
});

longbar3.animate(0.9);  // Number from 0.0 to 1.0

var longbar4 = new ProgressBar.Line(repairLongbar, {
  strokeWidth: 5,
  easing: 'easeInOut',
  duration: 1400,
  color: 'blue',
  trailColor: '#eee',
  trailWidth: 5,
  svgStyle: {'border-radius': '7px'}
});

longbar4.animate(1.0);  // Number from 0.0 to 1.0
