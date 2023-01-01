import React from "react";
import { Outlet } from "react-router-dom";
import ProductList from "./ProductList";

export default function Main() {
  return (
    <>
      {/* <ProductList /> */}
      {/* <ProductList /> */}
      <Outlet />
    </>
  );
}
