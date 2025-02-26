<x-staff-layout>

    <!-- Content Area -->
    <div class="content">
        <h2>Schedule</h2>

        <!-- Add Data Button -->
        <button class="add-data" onclick="addRow()">+ Add Data</button>

        <!-- Schedule Table -->
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Service</th>
                    <th>Client</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="schedule-table">
                <tr>
                    <td contenteditable="true">mm/dd/yyyy</td>
                    <td contenteditable="true">12:00</td>
                    <td contenteditable="true">Service 1</td>
                    <td contenteditable="true">Kathryn Bernardo</td>
                    <td><button class="remove-btn" onclick="removeRow(this)">X</button></td>
                </tr>
                <tr>
                    <td contenteditable="true">mm/dd/yyyy</td>
                    <td contenteditable="true">12:00</td>
                    <td contenteditable="true">Service 4</td>
                    <td contenteditable="true">Chesney Kath Daniel Tyrone</td>
                    <td><button class="remove-btn" onclick="removeRow(this)">X</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-staff-layout>