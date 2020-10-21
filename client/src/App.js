import React from 'react';
import { BrowserRouter, Switch, Route, NavLink } from 'react-router-dom';

import Register from './Register';
import Login from './Login';

function App() {
  return (
      <div className="App">
        <BrowserRouter>
          <div>
            <div className="header">
              <NavLink exact activeClassName="active" to="/">Register</NavLink><br/>
              <NavLink exact activeClassName="active" to="/login">Login</NavLink><br/>
              <NavLink exact activeClassName="active" to="/names">Names</NavLink><br/>
            </div>
            <div>
              <Switch>
                <Route exact path="/" component={Register} />
                <Route exact path={"/login"} component={Login} />
              </Switch>
            </div>
          </div>
        </BrowserRouter>
      </div>
  );
}

export default App;