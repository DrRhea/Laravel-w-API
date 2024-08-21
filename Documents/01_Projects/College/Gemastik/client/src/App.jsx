import React from 'react';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Home from './pages/Home'
import Lapor from './pages/Lapor';

const App = () => {
  return (
    <Router>
      <div>
        <Switch>
          <Route exact path="/" component={Home} />
          <Route exact path="/lapor" component={Lapor} />
        </Switch>
      </div>
    </Router>
  );
};

export default App;
