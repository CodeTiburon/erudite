var React = require('react');
var template = require('./404.view.jsx');

var NotExistsPage = React.createClass({
  render: function () {
    return template.apply(this);
  }
});

module.exports = NotExistsPage;
