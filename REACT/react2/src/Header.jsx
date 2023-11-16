
function Header(props) {
  return (
    <div className="composant">
      <h2>Header</h2>
      Count={props.list.length}
    </div>
  );
}

export default Header;
