import React, { Component } from "react";
import ReactDOM from "react-dom";
import Example from "./Example";

export default class Componente extends Component {
    render() {
        return (
            <div className="container my-5">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">
                                Hola, Este es el componente.
                                <br />
                                <Example />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById("componente")) {
    ReactDOM.render(<Componente />, document.getElementById("componente"));
}
