// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Card extends Component {

  static slug = 'toyotacomps_card';


  render() {
    const Content = this.props.content;
    const title = this.props.card_title;
    const image = this.props.image;
    const link_label = this.props.link_label;

    return (
      <div>
        { image && <img src={ image } alt="" /> }
        <h1>{title}</h1>
        <Content />
        <a href="%4$s" className="c-button c-button--no-background">
          <span className="has-toyota-red-color">{ link_label }</span>
        </a>
      </div>
    );
  }
}

export default Card;
