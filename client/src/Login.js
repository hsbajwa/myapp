import React, { useState } from 'react';
import { setUserSession } from './utils/Common';

function Login(props) {
    const userId = useFormInput('');
    const password = useFormInput('');
    const userDetails = {
        user_id: '100005',
        password: 'password',
    }

    // handle button click of login form
    const handleLogin = () => {
        fetch('http://localhost:8888/api/login', {
            method: 'post',
            body: JSON.stringify(userDetails)
        }).then(function(response) {
            console.log(response.json());
        });
    }

    return (
        <div>
            Login<br /><br />
            <div>
                User ID<br />
                <input type="text" name="userId" placeholder="user id"/>
            </div>
            <div style={{ marginTop: 10 }}>
                Password<br />
                <input type="password" name="password" placeholder="password"/>
            </div>
            <input type="button" onClick={handleLogin}/><br />
        </div>
    );
}

const useFormInput = initialValue => {
    const [value, setValue] = useState(initialValue);

    const handleChange = e => {
        setValue(e.target.value);
    }
    return {
        value,
        onChange: handleChange
    }
}

export default Login;