SELECT user.firstname, user.lastname, user.user_id, t.teacher_id
FROM teacher t
    INNER JOIN     user
ON t.user_id = user.user_id
            INNER JOIN teacher_subject ON teacher_subject.teacher_id = t.teacher_id
            WHERE teacher_subject.course_id IN
(
                SELECT s.course_id
FROM student_subject s
WHERE s.student_id = (
                    SELECT st.student_id
FROM student st
    INNER JOIN     user
ON user.user_id = st.user_id
                    WHERE user.user_id = $user_id
                )
            );