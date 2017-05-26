import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Users extends Component {
    render() {
        return (
            <div className='panel-body'>
            </div>
        );
    }
}
 
export default Users;

if (document.getElementById('users')) {
    ReactDOM.render(<Users />, document.getElementById('users'));
}