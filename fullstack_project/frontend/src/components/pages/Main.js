import React from "react";
import { Outlet } from "react-router-dom";
import Footer from "../Footer";
import Header from "../Header";
import Navbar from "../Navbar";

export default function Main() {
  return (
    <>
      <Navbar />
      <Header />
      <Outlet />
      <Footer />
    </>
  );
}
