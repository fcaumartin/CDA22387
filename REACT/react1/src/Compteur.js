import React, { useState } from 'react';

const Compteur = () => {

  console.log("Composant compteur");

  const [cpt, setCpt] = useState(0);

  const handleClick = () => {
    let n = cpt+1
    setCpt(n)
  }

  return (
    <div >
      <span>{cpt}</span>
      <button onClick={handleClick}>Encore !</button>
    </div>
  );
}

export default Compteur;
