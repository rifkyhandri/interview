const e = React.createElement;

function LikeButton(){
    // Display a "Like" <button>
    return e(
      'button',
      { onClick: () => console.log('button work') },
      'Like'
    );
}

const domContainer = document.querySelector('#like_button_container');
ReactDOM.render(e(LikeButton), domContainer);