// johnmathews.tech - NavBar.js
// help users navigate to other endpoints
// Docs: https://nextui.org/docs/components/navbar

// import statements
import React from 'react';
import {Link, Button} from '@nextui-org/react';
import {Navbar, NavbarBrand, NavbarContent, NavbarItem, NavbarMenuToggle, NavbarMenu, NavbarMenuItem} from "@nextui-org/react";

const NavBar = () => {

  return(
      <div className= "dark">
          <Navbar isBordered>
              <NavbarBrand>
                  <p className="text-white mt-5 text-base font-medium tracking-tight">johnmathews.tech</p>
              </NavbarBrand>
              <NavbarContent>
                  <NavbarItem>
                      <Link className="text-white">
                          About Me
                      </Link>
                  </NavbarItem>
                  <NavbarItem>
                      <Link className="text-white">
                          Travel Blog
                      </Link>
                  </NavbarItem>
                  <NavbarItem>
                      <Link className="text-white">
                          Résumé
                      </Link>
                  </NavbarItem>
              </NavbarContent>
          </Navbar>
      </div>
  );
};

export default NavBar;