import React, { useState } from 'react';
import Header from './Header';
import Footer from './Footer';
import Message from './Message';
import Compteur from './Compteur';
import Saisie from './Saisie';

const App = () => {

  console.log("Composant app");

  const [texte, setTexte] = useState("toto");

  const handleClick = () => {
    console.log("test clique ...")
    setTexte("new value...")
  }

  return (
    <>
      <Header />
      <Saisie />
      <Compteur />
      <Message valeur={texte} couleur="111" actif={true}/>
      <button onClick={handleClick}>Clique moi !!!</button>
      <Footer />
    </>
  );
}

export default App;
