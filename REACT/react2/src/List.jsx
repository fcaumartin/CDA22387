
function List(props) {

  

  return (
    <div className="composant">
      <h4>List</h4>
      <ul>
      {
        props.list.map(
          (element, index)=>(
            <li key={index}>
              {element}-{index}
            </li>
          )
        )
      }
      </ul>
    </div>
  );
}

export default List;
