// johnmathews.tech - App.js
// Entry point into the website

/*
TODO:
  - Create home screen
  -> create tailwindcss theme section
*/


// import statements
import './App.css';
import './index.css';
import * as React from "react";
import {NextUIProvider} from "@nextui-org/react";
import HomePage from "./Components/HomePage";
import NavBar from "./Components/NavBar";

function App() {
  return (
    <NextUIProvider>
        <NavBar/>
        <HomePage/>
    </NextUIProvider>
  );
}

export default App;
