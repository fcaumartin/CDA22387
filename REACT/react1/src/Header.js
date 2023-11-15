import React from 'react';

const Header = () => {
  const nom = "Julien"
  const affiche = false
  const message = "le message"
  const tab = [ 321,654,321,555]

  return (
    <div >
      Header <span className="engras">{nom}</span>
      {/* {
        affiche?( <>{message}</> ):( <span>vide</span> )
      }
      {
        affiche && ( <>{message}</> )
      }   
      {
        tab.map((element, index)=>(
          <div key={index}>
            {element}
          </div>
        ))
      } */}
    </div>
  );
}

export default Header;
