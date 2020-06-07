// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Cars extends Component {

  static slug = 'toyotacomps_cars';


  render() {
    const title = this.props.cars_title;

    return (
      <div>
        <h1>{title}</h1>
      </div>
    );
  }
}

export default Cars;
