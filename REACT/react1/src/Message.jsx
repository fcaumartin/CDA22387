import React from 'react';

const Message = ({valeur, couleur, actif}) => {

  return (
    <div >
      {valeur}
      {couleur}
      {actif}
    </div>
  );
}

export default Message;
