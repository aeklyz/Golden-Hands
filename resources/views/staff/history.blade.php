<x-staff-layout>
    <div class="content">
        <h2>Transaction Report</h2>

        <!-- Transaction Table -->
        <table>
            <thead>
                <tr>
                    <th>Therapist</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Service</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody id="transaction-table">
                <tr>
                    <td contenteditable="true">John Doe</td>
                    <td contenteditable="true">2024-02-08</td>
                    <td contenteditable="true">10:00 AM</td>
                    <td contenteditable="true">Massage</td>
                    <td contenteditable="true">$50</td>
                </tr>
                <tr>
                    <td contenteditable="true">Jane Smith</td>
                    <td contenteditable="true">2024-02-08</td>
                    <td contenteditable="true">11:30 AM</td>
                    <td contenteditable="true">Facial</td>
                    <td contenteditable="true">$70</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-staff-layout>