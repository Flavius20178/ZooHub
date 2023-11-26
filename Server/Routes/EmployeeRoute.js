import express from 'express';
import con from '../utils/db.js';
import jwt from 'jsonwebtoken';
import bcrypt from 'bcrypt';

const router = express.Router();

router.post('/employee_login', async (req, res) => {
    try {
        const sql = 'SELECT * FROM employee WHERE email = ?';
        const [result] = await con.promise().query(sql, [req.body.email]);

        if (result.length > 0) {
            const passwordMatch = await bcrypt.compare(req.body.password, result[0].password);

            if (passwordMatch) {
                const { email, id } = result[0];
                const secretKey = process.env.JWT_SECRET_KEY || 'default_secret_key';
                const token = jwt.sign({ role: 'employee', email, id }, secretKey, { expiresIn: '1d' });

                res.cookie('token', token);
                return res.json({ loginStatus: true, id });
            }
        }

        return res.json({ loginStatus: false, Error: 'Invalid email or password' });
    } catch (error) {
        console.error(error);
        return res.json({ loginStatus: false, Error: 'Internal server error' });
    }
});

router.get('/detail/:id', async (req, res) => {
    try {
        const id = req.params.id;
        const sql = 'SELECT * FROM employee WHERE id = ?';
        const [result] = await con.promise().query(sql, [id]);

        return res.json(result);
    } catch (error) {
        console.error(error);
        return res.json({ Status: false });
    }
});

router.get('/logout', (req, res) => {
    res.clearCookie('token');
    return res.json({ Status: true });
});

export { router as EmployeeRouter };
