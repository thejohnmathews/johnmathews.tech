// johnmathews.tech - App.js
// Entry point into the website

/*
TODO:
  - Create home screen
  -> it should behave as a about me page with links?
  -> menu option to resume
  -> menu option to personal blog

Thoughts:
  - I destroyed the initial public/index.html, did I need it?
  - 
*/


// import statements
import * as React from "react";
import './App.css';
import {NextUIProvider} from "@nextui-org/react";

function App() {
  return (
    <NextUIProvider>
      <div> 
        <h1> Hello World, testing CI/CD Deployment. </h1>
      </div>
    </NextUIProvider>
  );
}

export default App;
