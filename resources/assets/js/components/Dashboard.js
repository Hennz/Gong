import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Dashboard extends Component {
    render() {
        return (
            <div className='panel-body'>
            </div>
        );
    }
}
 
export default Dashboard;

if (document.getElementById('dashboard')) {
    ReactDOM.render(<Dashboard />, document.getElementById('dashboard'));
}