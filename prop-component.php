<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Hello World</title>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  </head>
  <body>
    <div id="app"></div>
	<div id="root"></div>
    <script type="text/babel">
	function formatDate(date) {
	  return date.toLocaleDateString();
	}

	function Avatar(props) {
	  return (
		<img
		  className="Avatar"
		  src={props.user.avatarUrl}
		  alt={props.user.name}
		/>
	  );
	}

	function UserInfo(props) {
	  return (
		<div className="UserInfo">
		  <Avatar user={props.user} />
		  <div className="UserInfo-name">{props.user.name}</div>
		</div>
	  );
	}

	function Comment(props) {
	  return (
		<div className="Comment">
		  <UserInfo user={props.author} />
		  <div className="Comment-text">{props.text}</div>
		  <div className="Comment-date">
			{formatDate(props.date)}
		  </div>
		</div>
	  );
	}

	const comment = {
	  date: new Date(),
	  text: 'I hope you enjoy learning React!',
	  author: {
		name: 'Hello Kitty',
		avatarUrl: 'http://placekitten.com/g/64/64',
	  },
	};
	ReactDOM.render(
	  <Comment
		date={comment.date}
		text={comment.text}
		author={comment.author}
	  />,
	  document.getElementById('root')
	);

    </script>
    <!--
      Note: this page is a great way to try React but it's not suitable for production.
      It slowly compiles JSX with Babel in the browser and uses a large development build of React.

      To set up a production-ready React build environment, follow these instructions:
      * https://reactjs.org/docs/add-react-to-a-new-app.html
      * https://reactjs.org/docs/add-react-to-an-existing-app.html

      You can also use React without JSX, in which case you can remove Babel:
      * https://reactjs.org/docs/react-without-jsx.html
      * https://reactjs.org/docs/cdn-links.html
    -->
  </body>
</html>