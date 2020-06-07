// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Button extends Component {

  static slug = 'toyotacomps_button';

  render() {
    const Content = this.props.content;

    return (
      <a href="/" class="c-button">
        <Content/>
      </a>
    );
  }
}

export default Button;
