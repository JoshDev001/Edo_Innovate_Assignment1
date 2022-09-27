import React, { useState } from "react";
import Counter from "./counter";
import "./App.css";

const App = () => {
  return (
    <div className="App">
      <header className="App-header">
        <h2> Welcome to my counter </h2>
        <Counter />
      </header>
    </div>
  );
};

export default App;
