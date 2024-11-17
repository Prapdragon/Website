using UnityEngine;

public class PlayerMovement : MonoBehaviour
{
    public CharacterController controller; // ตัวควบคุม CharacterController
    public float speed = 5f; // ความเร็วของการเดิน
    public float gravity = -9.8f; // ความแรงของแรงดึงดูด
    public float jumpHeight = 3f; // ความสูงของการกระโดด

    public Transform groundCheck; // จุดเช็คการสัมผัสพื้น
    public float groundDistance = 0.4f; // ระยะทางเช็คพื้น
    public LayerMask groundMask; // เลเยอร์ที่ใช้เช็คพื้น

    private Vector3 velocity; // ความเร็วของตัวละคร
    private bool isGrounded; // เช็คว่าตัวละครสัมผัสพื้นอยู่

    void Update()
    {
        // เช็คว่าตัวละครสัมผัสพื้น
        isGrounded = Physics.CheckSphere(groundCheck.position, groundDistance, groundMask);

        if (isGrounded && velocity.y < 0)
        {
            velocity.y = -2f; // ปรับความเร็วลงเมื่อสัมผัสพื้น
        }

        // รับ input ของการเคลื่อนไหว
        float x = Input.GetAxis("Horizontal");
        float z = Input.GetAxis("Vertical");

        Vector3 move = transform.right * x + transform.forward * z;
        controller.Move(move * speed * Time.deltaTime);

        // การกระโดด
        if (Input.GetButtonDown("Jump") && isGrounded)
        {
            velocity.y = Mathf.Sqrt(jumpHeight * -2f * gravity);
        }

        // เพิ่มแรงดึงดูด
        velocity.y += gravity * Time.deltaTime;
        controller.Move(velocity * Time.deltaTime);
    }
}
